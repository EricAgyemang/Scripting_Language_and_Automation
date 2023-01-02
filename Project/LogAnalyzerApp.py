from collections import Counter
from datetime import datetime
import os
import re
path =r'C:\Users\20bal\PycharmProjects\MiniProject\log'
os.chdir(path)


def top10_ip(file_path):
    with open(file_path, 'r') as f:
        data = f.readlines()
        counts = {}
        for line in data:
            ip = "".join(re.findall(r'(\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}\s\-)',line)) #IP finder
            date = "".join(re.findall(r'\d{1,2}/\w{3}/\d{1,4}', line)) #Date finder
            if datetime.strptime(date, "%d/%b/%Y") >= datetime.strptime("18/Feb/2016", "%d/%b/%Y") and datetime.strptime(date, "%d/%b/%Y") <= datetime.strptime("01/Mar/2016", "%d/%b/%Y"):
                if ip in counts:
                    counts[ip] += 1
                else:
                    counts[ip] = 1
        c = Counter(counts)
        top10 = c.most_common(10)
        return top10

def top3_http(file_path):
    with open(file_path, 'r') as f:
        data = f.readlines()
        counts = {}
        for line in data:

            date = "".join(re.findall(r'\d{1,2}/\w{3}/\d{1,4}', line)) # Date finder
            http = "".join(re.findall(r"\"[a-zA-Z]+\s", line)) # http action

            if datetime.strptime(date, "%d/%b/%Y") >= datetime.strptime("18/Feb/2016", "%d/%b/%Y") and datetime.strptime(date, "%d/%b/%Y") <= datetime.strptime("01/Mar/2016", "%d/%b/%Y"):
                if http in counts:
                    counts[http] += 1
                else:
                    counts[http] = 1
        c = Counter(counts)
        top3 = c.most_common(3)
        return top3

def top5_404(file_path):
    with open(file_path, 'r') as f:
        data = f.readlines()
        counts = {}
        for line in data:

            ip = "".join(re.findall(r'(\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}\s\-)', line))  # IP finder
            date = "".join(re.findall(r'\d{1,2}/\w{3}/\d{1,4}', line)) # date finder
            status = "".join(re.findall(r'\s404', line)) # status code finder

            if datetime.strptime(date, "%d/%b/%Y") >= datetime.strptime("18/Feb/2016", "%d/%b/%Y") and datetime.strptime(date, "%d/%b/%Y") <= datetime.strptime("01/Mar/2016", "%d/%b/%Y"):
                if status:
                    if ip in counts:
                        counts[ip] += 1
                    else:
                        counts[ip] = 1
        c = Counter(counts)
        top5 = c.most_common(5)
        return top5

def top5_Post200(file_path):
    with open(file_path, 'r') as f:
        data = f.readlines()
        counts = {}
        for line in data:
            ip = "".join(re.findall(r'(\d{1,3}\.\d{1,3}\.\d{1,3}.\d{1,3}\s\-)', line))  # IP finder
            date = "".join(re.findall(r'\d{1,2}/\w{3}/\d{1,4}', line))  # date finder
            status = "".join(re.findall(r'\s200', line))  # status code finder
            http = "".join(re.findall(r'POST', line))  # http action
            if datetime.strptime(date, "%d/%b/%Y") >= datetime.strptime("18/Feb/2016", "%d/%b/%Y") and datetime.strptime(date, "%d/%b/%Y") <= datetime.strptime("01/Mar/2016", "%d/%b/%Y"):
                if http:
                    if status:
                        if ip in counts:
                            counts[ip] += 1
                        else:
                            counts[ip] = 1
        c = Counter(counts)
        top5 = c.most_common(5)
        return top5