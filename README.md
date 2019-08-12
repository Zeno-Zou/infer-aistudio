# infer-aistudio

Paddle-aistudio 部署在线服务，以mnist手写数字识别为范例https://aistudio.baidu.com/aistudio/projectDetail/10037

创建预测服务以及选择模型文件参照百度AISTUDIO手册https://ai.baidu.com/docs#/AIStudio_Project_Forecast/top

输入为字符串格式img，输出为字符串格式lab

参数转换器输入为input.py,输出为output.py

传入数据为图片base64转化后的字符串http://tool.oschina.net/encrypt?type=4

把index.html以及curl.php部署在web端即可运行程序
