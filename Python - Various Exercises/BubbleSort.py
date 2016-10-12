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

while j < len(x)-1:
    for i in range (0, len(x)-1):
        if x[i]> x[i+1]:
            x[i], x[i+1] = x[i+1], x[i]
            i+=1
        else:
            i+=1
    j += 1

print "Sorted set", x

t2 = datetime.time(1,2,3,4)
print "End time is", t2
