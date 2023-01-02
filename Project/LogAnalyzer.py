from LogAnalyzerApp import *

path =r'C:\Users\20bal\PycharmProjects\MiniProject\log'
for file in os.listdir():
    if file.endswith('.log'):
        file_path = f'{path}\{file}'
        print(file,'Top 10 client IPs between 18/Feb/2016 and 01/Mar/2016 are: ', top5_Post200(file_path))
        print(file,'Top 3 HTTP actions between 18/Feb/2016 and 01/Mar/2016 are: ', top3_http(file_path))
        print(file,'Top 5 client IPs with status code 404 between 18/Feb/2016 and 01/Mar/2016 are: ', top5_404(file_path))
        print(file,'Top 5 client IPs with HTTP action POST and status code 200 between 18/Feb/2016 and 01/Mar/2016 are: ',top5_Post200(file_path))