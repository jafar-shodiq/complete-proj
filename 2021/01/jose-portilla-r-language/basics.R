 # Arithmetic
1 + 2
100 + 11
12.2 + 13.1
1/2
2^3
100 * 2 + 50/2
100 * (2 + 50) /2
5 %% 2





# Variables
a <- 100
a
bank <- 1000
bank
bank.account <- 100 # common naming

deposit <- 20
bank.accoount <- bank.account + deposit
bank.account





# Data types
TRUE
FALSE
T
F
b <- T
b

a <- 'hello'
b <- "hello"

class(a)
class(b)
class(12)
class(3.2)
class(TRUE)
class(FALSE)





# Vector basics
nvec <- c(1, 2, 3, 4, 5)
nvec
class(nvec)
cvec <- c('U', 'S', 'A')
cvec
class(cvec)
lvec <- c(T, F)
lvec
class(lvec)

v <- c(TRUE, 20, 40)
v
v <- c(FALSE, 20, 40)
v
class(v)
v <- c('USA', 20, 30)
v
class(v)

temps <- c(72, 71, 68, 73, 69, 75, 74)
temps
names(temps) <- c('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
temps
days <- c('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun')
days
names(temps) <- days
temps





# Vector operations
v1 <- c(1, 2, 3)
v2 <- c(4, 5, 6)
v1 + v2
v2 - v1
v1 * v2
v1 / v2
sum(v1)
sum(v2)
sd(v1)
max(v1)
min(v1)
prod(v1)
prod(v2)





# Comparison operators
5 > 6
5 < 6
5 <= 6
5 >= 6
5 == 6
5 != 6

v <- c(1, 2, 3, 4, 5)
v < 2
v == 3
v2 <- c(4, 2, 6, 9, 5)
v < v2
v == v2





# Vector indexing and slicing
v1 <- c(100, 200, 300)
v2 <- c('a', 'b', 'c')
v1
v2
v1[3] # does not start from 0
v2[2]
v1[c(1,2)]
v2[c(1, 3)]
v1[c(2)]

v <- c(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)
v
v[2:4]
v[7:10]

v <- c(1, 2, 3, 4)
names(v) <- c('a', 'b', 'c', 'd')
v
v[2]
v['b']
v[c('c', 'a')]

v
v[v > 2]
my.filter <- v > 2
v[my.filter]





# Getting help
help('vector')
??vector
help.search('vector')
??'numeric-class'