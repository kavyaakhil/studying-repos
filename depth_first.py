# iterative way of solving problem
def depthFirst(arr, start):
    stack = [start]
    
    while(len(stack) > 0):
        current = stack.pop();
        print(current)
        
        for i in range(len(arr[current])):
            stack.append(arr[current][i])

# recursive way of solving problem
def depthFirstRecursive(arr,start):
    print(start)
    for i in range(len(arr[start])):
        depthFirstRecursive(arr, arr[start][i])
    
graph = {
    'a': ['b', 'c'],
    'b': ['d'],
    'c': ['e'],
    'd': ['f'],
    'e': [],
    'f': [],
}

depthFirst(graph, 'a')
depthFirstRecursive(graph, 'a')
