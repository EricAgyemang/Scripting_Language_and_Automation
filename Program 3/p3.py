from csv import reader
from statistics import variance
import math
import p3Lib
dataSet=[]
with open("salary.csv") as reader_obj:
    data = reader_obj.readlines()
    for item in data:
        dataSet.append(item.strip().split(','))

train,test=p3Lib.train_test_split(dataSet,.8)
print("b0 is ",p3Lib.coefficients(test)[0]," and b1 is ",p3Lib.coefficients(test)[1])




print("The RSME is \n",p3Lib.evalRMSE(test))





