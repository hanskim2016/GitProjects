import random
import datetime

today = datetime.date.today()
print today

t1 = datetime.time(1,2,3,4)
print "Start time is", t1

x = random.sample(xrange(10001), 100)

print "Initial set", x

i = 0
j = 0
y = len(x) -1


for j in range (0, y):
    while j < y:
        for i in range (0, y):
            if x[i]> x[i+1]:
                temp = x[i+1]
                x[i+1]=x[i]
                x[i] = temp
                i+=1
                print x
            else:
                i+=1
    j += 1


t2 = datetime.time(1,2,3,4)

print "End time is", t2
