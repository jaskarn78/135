#lang racket
(define close
  (lambda (num1 num2)
         (if (<=(abs(- num1 num2)) (abs 0.001))
             #t
             #f)))


(define close?
       (lambda (num1 num2 limit)
         (if (<= (abs(- num1 num2)) (abs limit))
             #t
             #f)))