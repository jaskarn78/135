#lang racket
(define how-many
  (lambda (a b c)
    (if (> (* b b) (* 4 a c))
        2
        (if(= (* b b) (* 4 a c))
           1
           (if (< (* b b) (* 4 a c))
               0
               "else error")))))