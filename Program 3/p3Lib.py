import math
import random

def sumList(aList):
    total = 0
    for t in aList:
        total +=t
    return total


def meanList(aList):
    avg = sumList(aList) / len(aList)
    return avg


def minMaxList(aList):
    min_num = 200
    max_num = 0
    for t in aList:
        if t > max_num:
            max_num = t

        if t < min_num:
            min_num = t
    return min_num, max_num


def stdevList(aList):
    value = 0
    for t in aList:
        value += (t - meanList(aList)) ** 2
    stdev = (math.sqrt(value) / 10)
    return round(stdev, 2)

def train_test_split(aList,ratio):
    trainSet=aList[:int(len(aList)*(ratio))]
    testSet=aList[int(len(aList)*(ratio)):]
    return trainSet, testSet

def varianceList(aList):
    variance = sumList((i - meanList(aList))**2 for i in aList) / (len(aList)-1)
    return variance

def covarianceList(aList,bList):
    m=meanList(aList)
    m2=meanList(bList)
    covariance=sumList([(a-m)*(b-m2) for a,b in zip(aList,bList)])/(len(aList)-1)
    return covariance

def coefficients(trainingDatasetList):
    x = [item[0] for item in trainingDatasetList]
    aList = []
    for i in x:
        aList.append(float(i))

    y = [item[1] for item in trainingDatasetList]
    bList = []
    for i in y:
        bList.append(int(i))
    b1 = covarianceList(aList,bList) / varianceList(aList)
    b0 = meanList(bList) - b1 * meanList(aList)
    return b0, b1

def evalRMSE(testResultList):
    b0,b1 = coefficients(testResultList)

    y_predict = [b0+b1 * float(item[0]) for item in testResultList]
    y_actual = [int(item[1]) for item in testResultList]

    summation=0
    rmse = []
    for i in range(0,len(testResultList)):
        sum = ((y_predict[i]-y_actual[i])**2)/len(y_predict)
        summation+=sum
        rmse.append(math.sqrt(summation))

    return rmse

