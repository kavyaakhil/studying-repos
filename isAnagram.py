# valid anagrams
# given two strings s1 ans s2, check if both strings has same alphabets with same frequency

# using counter to solve the problem
from collections import Counter

def isAnagram(str1, str2):
    if(len(str1) != len(str2)): return false
    
    return Counter(str1) == Counter(str2)
    
print(isAnagram('danger', 'garden'))

# using lexicographically sort to solve the problem
def isAnagramSort(str1, str2):
    if(len(str1) != len(str2)): return false
    
    return sorted(str1) == sorted(str2)
    
print(isAnagramSort('danger', 'garden'))
