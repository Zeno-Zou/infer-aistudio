# -*- coding: utf-8 -*-
"""
Hook
"""
import os
import sys

sys.path.append("..")
from PIL import Image

import numpy as np
import paddle.fluid as fluid

from home.utility import base64_to_image


def reader_infer(data_args):
    def reader():
        img = fluid.layers.data(name='img', shape=[1, 28, 28], dtype='float32')
        feeder = fluid.DataFeeder(place=fluid.CPUPlace(), feed_list=[img])
        imgg = base64_to_image(data_args["img"])
        imgg = imgg.convert('L')
        imgg = imgg.resize((28, 28), Image.ANTIALIAS) 
        imgg = np.array(imgg).reshape(1, 1, 28, 28).astype(np.float32)
        imgg = imgg / 255.0 * 2.0 - 1.0    
        return [[imgg]], feeder

    return reader
