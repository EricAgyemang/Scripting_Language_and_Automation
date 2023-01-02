def sumList(wlist):
    sum = 0
    for i in wlist:
        sum += i
    return sum


def meanList(wlist):
    sum = sumList(wlist)
    mean = sum / len(wlist)
    return mean


def minMaxList(wlist):
    min = wlist[0]
    max = wlist[0]
    for i in wlist:
        if i < min:
            min = i
        elif i > max:
            max = i
    return min, max


def stdevList(wlist):
    mean = meanList(wlist)
    sumSQ = 0
    for i in wlist:
        sumSQ += (i - mean) ** 2
    meanSQ = sumSQ / len(wlist)
    stdev = meanSQ ** .5
    return stdev
