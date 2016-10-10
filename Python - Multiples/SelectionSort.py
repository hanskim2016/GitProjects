import datetime
import random

x = random.sample(xrange(10001), 100)

# x = [9,8,7,6,5,4,3,2,1]


i = 0

for i in range(0, len(x)/2):
    # print "i is", i
    x[x.index(min(x[i:]))], x[i] = x[i], x[x.index(min(x[i:]))]
    # print "min function", x
    i += 1
    # print "i is", i
    # x[x.index(max(x[i:-i]))], x[-i] = x[-i], x[x.index(max(x[i:-i]))]
    # print "max function", x

print x
