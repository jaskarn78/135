#lang racket
(define (filter-out list symbol)
  (cond ((null? list) '())
        ((eq? (car list) symbol)
         (filter-out (cdr list) symbol))
        (else (cons (car list)
                    (filter-out (cdr list) symbol )))))