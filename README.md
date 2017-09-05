# 1dv610WS3_Sticks

Behöver fixas:
Class AI -> sticksToRemove(). De nuvarande reglerna för hur många sticks AI ska ta bort fungerar inte. Just nu hårdkodat, kanske bör slumpas fram?

Class Game -> gameResult(). Returnerar ingen vinnare. Skrivs aldrig ut av index.php.

Regler för hur många sticks som kan tas bort av Player. I nuvarande läge kan Player ta bort hur många sticks som helst och begränsas inte till 1-3 sticks.

Utkommenterad kod i Game.php är alternativ lösning till ovanstående kod i funktionen AIRemoveSticks().