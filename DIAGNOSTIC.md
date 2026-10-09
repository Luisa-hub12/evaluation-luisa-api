# Diagnostic

Une section par test en échec : renseignez ses quatre champs.

## testAddingALineToAnUnknownOrderIsNotFound

**Symptôme** : Le test dit que quand on ajoute une ligne à une commande inconnue, ça nous dit que la commande n'a pas été trouvée.

**Cause** :  

**Règle du module en jeu** : la règle que ce code doit respecter est que quand on ajoute une ligne à une commande inconnue, ça nous dit que la commande n'a pas été trouvée.

**Correctif** : 

## testAddingALineToAPaidOrderIsAConflict

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testAddingALineToMyOrder

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testAddingALineWithAZeroQuantityIsUnprocessable

**Symptôme** : il faut que quand on ajoute une ligne avec une quantité de 0, ça nous dit que ça nous est pas autorisé

**Cause** : OrderADDlineInput.php ligne 21

**Règle du module en jeu** :

**Correctif** : il faut un asset positive sans le zero

## testListingKitchenTicketsReturnsMine

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testListingKitchenTicketsWithoutTokenIsUnauthorized

**Symptôme** : le test dit que quand on liste les tickets sans token, ça nous dit que ça nous est pas autorisé

**Cause** : kitchenticket.php ligne 21

**Règle du module en jeu** : il faut mettre is granted dans le security pour dire qu'un user est connecté

**Correctif** : il faut mettre is granted dans le security

## testOpeningAnOrderIgnoresAnAbandonedOne

**Symptôme** :

**Cause** :

**Règle du module en jeu** :

**Correctif** :

## testPayingMyOrderMarksItPaid

**Symptôme** : Le test dit que quand on a payé la commande ça marque que ça à été payé, mais l'api dit que quand on paye la commande, quand on retourne dans le panier, ça dit comme quoi elle a pas encore été reglée.

**Cause** : OrderService.php, ligne 213

**Règle du module en jeu** : Le code ne respecte pas le fait que quand on a payé on doit dire que la commande a bien été payé, et non re demande à l'utilisateur de payer, il faut mettre un flush

**Correctif** : rajouter à la ligne 213 un flush, pour qu'on ne nous re demande plus de payer une commande une fois qu'elle a été reglée.

$this->orderRepository->flush();

## testRefreshingTwiceWithTheSameTokenIsUnauthorized

**Symptôme** : On veut que l'actualisation de 2 jetons ne soit pas autorisé

**Cause** : le fichier pour modifier ça est me refresh_token_yaml

**Règle du module en jeu** : Il y aura 2 jeton sinon, le token sera pas refresh

**Correctif** : Il faut mettre le single use a true

## testRemovingALineFromSomeoneElsesOrderIsForbidden

**Symptôme** : On veut que quand on retire une ligne d'une commande qui n'est pas la nôtre, ça nous dit que ça nous est pas autorisé

**Cause** : C'est dans Order.php ligne 52

**Règle du module en jeu** : il faut que quand on retire une ligne d'une commande qui n'est pas la nôtre, ça nous dit que ça nous est pas autorisé

**Correctif** : "object.getCreatedBy() == user", a la place de is granted
