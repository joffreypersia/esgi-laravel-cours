<x-layout>
    <p>Bienvenue sur la page d'accueil</p>

    <div
        class="w-full bg-white rounded-xl shadow dark:bg-zinc-800 dark:text-zinc-100 overflow-hidden"
        x-data="{
            open: false,
            toggleAccordeon() {
                this.open = !this.open;
                console.log(this.open);
            }
        }"
    >
        <button
            type="button"
            class="w-full px-4 py-3 text-left font-medium bg-blue-600 text-white hover:bg-blue-700 flex justify-between items-center"
            @click="toggleAccordeon()"
            @keydown.l.window="toggleAccordeon()"
        >
            <span>Titre de l'accordéon</span>
        </button>
        <div
            x-show="open"
            x-collapse
        >
            <div class="p-4 border-t dark:border-zinc-700">
                Contenu de l'accordéon
            </div>
        </div>
    </div>
</x-layout>
