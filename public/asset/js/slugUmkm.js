const namaProduct = document.querySelector("#nama_product");
const slug = document.querySelector("#slug");

namaProduct.addEventListener("change", function () {
    fetch("/dashboard/umkm/checkSlug?nama_product=" + nama_product.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
});
