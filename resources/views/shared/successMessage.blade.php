@if (session()->has('success'))
<div id="collapsibleDiv" class="border border-green-500 bg-green-100 text-green-700 px-4 py-3 rounded relative" role="alert">
    {{ session('success') }}
    <p></p>
    <button onclick="collapseDiv()" class="absolute items-center justify-center top-0 bottom-0 right-0 px-4  text-[1.4rem]">×</button>


</div>
<script>
    function collapseDiv() {
        const div = document.getElementById("collapsibleDiv");
        div.style.display = div.style.display === "none" ? "block" : "none";
    }
</script>

@endif
