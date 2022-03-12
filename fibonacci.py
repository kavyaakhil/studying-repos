def fib(n):
    if(n<=2): return 1
    res = [0, 1]
    for i in range(2,n+1):
        res.insert(i, res[i-1] + res[i-2])
    
    return res[n]
    
print(fib(20))
