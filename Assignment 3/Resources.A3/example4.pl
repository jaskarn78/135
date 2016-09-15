

nbaplayer(kobe ).
nbaplayer(curry).
nbaplayer(jordan).
nbaplayer(westbrook).
greatestLakerPlayer(kobe).
greatestBullsPlayer(jordan).
greatestwarriorsplayer(curry).
greatestokcplayer(westbrook).


bestplayerfromwest(X):- greatestLakerPlayer(X).
bestplayerfromwest(X):- greatestwarriorsplayer(X).
bestplayerfromeast(Y):-greatestBullsPlayer(Y).
bestplayerfromeast(Y):-greatestokcplayer(Y).


bestofboth(X, Y):-bestplayerfromeast(X), bestplayerfromeast(Y).


