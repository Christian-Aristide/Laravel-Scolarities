###  SCOLARITIES APP  ###

# Notes important
- wire:submit.prevent="store" : permet de lié une varible du Controller a la vue
- Avec Liveware, le controller de base renvoie les vue et le dossier LiveWare contient les fonctions
- @if (Session::get('error')) : retourne les messages de (with) dans le controller
- wire:click='toggleStatus({{ $item->id }}) : ajouter un evenement. mais cette fonction doit etre defini dans le Controller de LiveWare


# App\LiveWire
- Fonction en composant
- Enregistre toute les logique du controller
- php artisan livewire:make 'name'
- mount() : pour les Edits 

# App\View\LiveWire
- je creer d'abord ma page en dure et je copie/coller mon code de base
- je tape la commande pour creer un composant Livewire associé a cette page que je viens de creer. 
- dès que la commande est exécuter, deux fichier Livewire seront creer et j'importe celui de la vue dans mon fichier creer en dûr; l'autre me servira pour toutes les fonctions





# Controller
- renvoie uniquement les vues

# Correspondance des fichier
- list-niveau (Level) -> Liste des niveaux
- list-niveau -> liste ni

# pagination
- mettre (use WithPagination) dans le LiveWare correspondant avant d'utiliser (links)