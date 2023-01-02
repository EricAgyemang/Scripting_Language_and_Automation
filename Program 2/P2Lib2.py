import random


def sampling(wlist, size, replacement=True):
    if replacement:
        return [wlist[random.randint(0, len(wlist) - 1)] for _ in range(size)]
    else:
        i = list(range(len(wlist)))
        samples = []

        for _ in range(size):
            num = random.randint(0, len(i) - 1)
            samples.append(wlist[i[num]])
            del i[num]
        return samples
