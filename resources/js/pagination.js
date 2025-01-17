class Pagination {
    constructor(selector, perPage) {
        this.currentPage = 1;
        this.items = document.querySelectorAll(`.${selector}-item`);
        this.perPage = perPage;
        this.totalItems = this.items.length;
        this.totalPages = Math.ceil(this.totalItems / this.perPage);
        this.prevBtns = document.querySelectorAll(`.${selector}-prev-btn`);
        this.nextBtns = document.querySelectorAll(`.${selector}-next-btn`);
        this.showingMin = document.getElementById(`${selector}-showing-min`);
        this.showingMax = document.getElementById(`${selector}-showing-max`);
        this.showingTotal = document.getElementById(`${selector}-showing-total`);
        this.paginationContainer = document.getElementById(`${selector}-pagination-numbers`);

        this.prevBtns.forEach(prevBtn => {
            prevBtn.addEventListener('click', this.prevClickHandler);
        });

        this.nextBtns.forEach(nextBtn => {
            nextBtn.addEventListener('click', this.nextClickHandler);
        });
    }

    init() {
        this.currentPage = 1;
        this.totalPages = Math.ceil(this.totalItems / this.perPage);
        this.renderItems();
    }

    renderItems() {
        const start = (this.currentPage - 1) * this.perPage;
        const end = this.currentPage * this.perPage;

        this.items.forEach((item, index) => {
            if (index >= start && index < end)
                item.style.display = 'block';
            else
                item.style.display = 'none';
        });

        this.renderShowing();
        this.renderPages();
    }

    renderShowing() {
        let numShowing = 0;

        this.items.forEach(produkItem => {
            if (produkItem.style.display != 'none')
                numShowing++;
        });

        this.showingMin.innerText = (this.currentPage - 1) * this.perPage + 1;
        this.showingMax.innerText = this.currentPage * this.perPage - (this.perPage - numShowing);
        this.showingTotal.innerText = this.totalItems;
    }

    renderPages() {
        this.paginationContainer.innerHTML = ''; // Clear existing page numbers

        for (let i = 1; i <= this.totalPages; i++) {
            if (i === this.currentPage)
                this.paginationContainer.innerHTML += `<a href="#" aria-current="page" class="relative z-10 inline-flex items-center bg-green-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">${i}</a>`;
            else
                this.paginationContainer.innerHTML += `<a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">${i}</a>`;

            // Add ellipsis for large number of pages
            if (i === 1 && this.currentPage > 3) {
                this.paginationContainer.innerHTML += `<span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0 ellipsis-prev">...</span>`;
                i = this.currentPage - 2;
            }
            if (i === this.currentPage + 2 && this.currentPage < this.totalPages - 2) {
                this.paginationContainer.innerHTML += `<span class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0 ellipsis-next">...</span>`;
                i = this.totalPages - 1;
            }
        }

        Array.from(this.paginationContainer.getElementsByTagName('a')).forEach(el => {
            el.addEventListener('click', this.pageClickHandler);
        });
    }

    isEmpty() {
        return this.items.length === 0;
    }

    prevClickHandler = (e) => {
        e.preventDefault();
        if (this.currentPage > 1) {
            this.currentPage--;
            this.renderItems();
        }
    }

    nextClickHandler = (e) => {
        e.preventDefault();
        if (this.currentPage < this.totalPages) {
            this.currentPage++;
            this.renderItems();
        }
    }

    pageClickHandler = (e) => {
        e.preventDefault();
        const newPage = parseInt(e.target.textContent);
        this.currentPage = newPage;
        this.renderItems();
    }
}

export default Pagination;
