from watson_developer_cloud import VisualRecognitionV3 as vr

import sys

def recognizeImg(img_url):
    instance = vr(api_key='fcbe00dd165a197ca7d9af9c0e3615ca40ff7a00',version='2016-11-12')
    img = instance.classify(images_url=img_url)
    return img['images'][0]['classifiers'][0]['classes']

print(recognizeImg(sys.argv[1]))