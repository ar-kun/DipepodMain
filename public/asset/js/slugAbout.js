const nama_lengkap = document.querySelector("#nama_lengkap");
const slug = document.querySelector("#slug");

nama_lengkap.addEventListener("change", function () {
    fetch("/dashboard/about/checkSlug?nama_lengkap=" + nama_lengkap.value)
        .then((response) => response.json())
        .then((data) => (slug.value = data.slug));
    // console.log(response);
});
