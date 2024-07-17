import Pagination from "./pagination";

class Search {
    constructor(selector, perPage) {
        this.searchInput = document.getElementById(`${selector}-search`);

        this.pagination = new Pagination(selector, perPage);
    }

    init() {
        this.pagination.init();

        this.searchInput.addEventListener('input', () => {
            this.pagination.currentPage = 1;

            this.searchValue = this.searchInput.value.toLowerCase();

            if (this.searchValue) {
                this.pagination.prevBtns.forEach(prevBtn => {
                    prevBtn.removeEventListener('click', this.pagination.prevClickHandler);
                    prevBtn.addEventListener('click', this.prevClickHandler);
                });

                this.pagination.nextBtns.forEach(nextBtn => {
                    nextBtn.removeEventListener('click', this.pagination.nextClickHandler);
                    nextBtn.addEventListener('click', this.nextClickHandler);
                });

                this.renderItems(this.searchValue);
            }
            else {
                this.pagination.prevBtns.forEach(prevBtn => {
                    prevBtn.removeEventListener('click', this.prevClickHandler);
                    prevBtn.addEventListener('click', this.pagination.prevClickHandler)
                });

                this.pagination.nextBtns.forEach(nextBtn => {
                    nextBtn.removeEventListener('click', this.nextClickHandler);
                    nextBtn.addEventListener('click', this.pagination.nextClickHandler);
                });

                this.pagination.init();
            }
        });
    }

    renderItems(searchValue) {
        this.pagination.items.forEach(item => {
            item.style.display = 'none';
        });

        const searchedItems = Array.from(this.pagination.items)
        .filter(item => item.getAttribute('data-title').toLowerCase().includes(searchValue));

        this.pagination.totalPages = Math.ceil(searchedItems.length / this.pagination.perPage);

        const start = (this.pagination.currentPage - 1) * this.pagination.perPage;
        const end = this.pagination.currentPage * this.pagination.perPage;

        searchedItems.forEach((item, index) => {
            if (index >= start && index < end)
                item.style.display = 'block';
            else
                item.style.display = 'none';
        });

        this.pagination.renderShowing();
        // this.pagination.renderPages();
        this.pagination.paginationContainer.innerHTML = ''; // Clear existing page numbers

        for (let i = 1; i <= this.pagination.totalPages; i++) {
            if (i === this.pagination.currentPage)
                this.pagination.paginationContainer.innerHTML += `<a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-green-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">${i}</a>`;
            else
                this.pagination.paginationContainer.innerHTML += `<a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">${i}</a>`;

            // Add ellipsis for large number of pages
            if (i === 1 && this.pagination.currentPage > 3) {
                this.pagination.paginationContainer.innerHTML += `<span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0 ellipsis-prev">...</span>`;
                i = this.pagination.currentPage - 2;
            }
            if (i === this.pagination.currentPage + 2 && this.pagination.currentPage < this.pagination.totalPages - 2) {
                this.pagination.paginationContainer.innerHTML += `<span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0 ellipsis-next">...</span>`;
                i = this.pagination.totalPages - 1;
            }
        }

        Array.from(this.pagination.paginationContainer.getElementsByTagName('a')).forEach(el => {
            el.removeEventListener('click', this.pagination.pageClickHandler);
            el.addEventListener('click', this.pageClickHandler);
        });
    }

    isEmpty() {
        return this.pagination.isEmpty();
    }

    prevClickHandler = (e) => {
        e.preventDefault();
        if (this.pagination.currentPage > 1) {
            this.pagination.currentPage--;
            this.renderItems(this.searchValue);
        }
    }

    nextClickHandler = (e) => {
        e.preventDefault();
        if (this.pagination.currentPage < this.pagination.totalPages) {
        console.log('page before', this.pagination.currentPage)
            this.pagination.currentPage++;
            this.renderItems(this.searchValue);
        }
    }

    pageClickHandler = (e) => {
        e.preventDefault();
        const newPage = parseInt(e.target.textContent);
        this.pagination.currentPage = newPage;
        this.renderItems(this.searchValue);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const wisataSearch = new Search('wisata', 6);
    const produkSearch = new Search('produk', 6);

    if (!wisataSearch.isEmpty())
        wisataSearch.init();

    if (!produkSearch.isEmpty())
        produkSearch.init();
});
