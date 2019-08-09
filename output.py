import numpy as np
import json
def output(results, data_args):
    lab=np.argsort(results)
    lines = []
    y = lab.tolist()
    lines.append({"best": y[-1]})
    return lines
