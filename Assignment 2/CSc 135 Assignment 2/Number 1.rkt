#lang racket
(define sphereVolume
  (lambda (r)
    (* 4 3.14 (/ ( * r r r) 3 ))))

(define shellVolume
  (lambda (outterR innerR)
    (- (sphereVolume outterR) (sphereVolume innerR))))