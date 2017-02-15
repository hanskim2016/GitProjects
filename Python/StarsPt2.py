x = ["tom",2,3,4,"sally", 7, 9]
i = 0

for x in x:
    if isinstance(x, int) == True:
        print "*"*x
        i += 1
    else:
        print x[:1] * len(x)
        i+=1
    # except TypeError:
    # print "string"
    # i +=1
