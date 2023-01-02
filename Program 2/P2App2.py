import P2Lib1
import P2Lib2

wList = [112.99, 136.49, 153.03, 142.34, 144.3, 123.3, 141.49, 136.46, 112.37, 120.67, 127.45, 114.14, 125.61, 122.46,
         116.09, 140, 129.5, 142.97, 137.9, 124.04, 141.28, 143.54, 97.9, 129.5, 141.85, 129.72, 142.42, 131.55, 108.33,
         113.89, 103.3, 120.75, 125.79, 136.22, 140.1, 128.75, 141.8, 121.23, 131.35, 106.71, 124.36, 124.86, 139.67,
         137.37, 106.45, 128.76, 145.68, 116.82, 143.62, 134.93, 147.02, 126.33, 125.48, 115.71, 123.49, 147.89, 155.9,
         128.07, 119.37, 133.81, 128.73, 137.55, 129.76, 128.82, 135.32, 109.61, 142.47, 132.75, 103.53, 124.73, 129.31,
         134.02, 140.4, 102.84, 128.52, 120.3, 138.6, 132.96, 115.62, 122.52, 134.63, 121.9, 155.38, 128.94, 129.1,
         139.47, 140.89, 131.59, 121.12, 131.51, 136.55, 141.49, 140.61, 112.14, 133.46, 131.8, 120.03, 123.1, 128.14,
         115.48]

samp5T = P2Lib2.sampling(wList, 5, True)
mean5T = P2Lib1.meanList(samp5T)
print('The mean of five samples with replacement is ', round(mean5T, 2))

samp10T = P2Lib2.sampling(wList, 10, True)
mean10T = P2Lib1.meanList(samp10T)
print('The mean of ten samples with replacement is ', round(mean10T, 2))

samp30T = P2Lib2.sampling(wList, 30, True)
mean30T = P2Lib1.meanList(samp30T)
print("The mean of thirty samples with replacement is", round(mean30T, 2))

samp5F = P2Lib2.sampling(wList, 5, False)
mean5F = P2Lib1.meanList(samp5F)
print('The mean of five samples without replacement is ', round(mean5F, 2))

samp10F = P2Lib2.sampling(wList, 10, False)
mean10F = P2Lib1.meanList(samp10F)
print('The mean of ten samples without replacement is ', round(mean10F, 2))

samp30F = P2Lib2.sampling(wList, 30, False)
mean30F = P2Lib1.meanList(samp30F)
print('The mean of thirty samples without replacement is ', round(mean30F, 2))
