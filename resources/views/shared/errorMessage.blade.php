@if (session()->has('error'))
<div id="collapsibleDiv" class="border border-red-500 bg-red-100 text-red-700 px-4 py-3 rounded relative" role="alert">
    {{ session('error') }}
    <button class="absolute items-center justify-center top-0 bottom-0 right-0 px-4  text-[1.4rem]" onclick="collapseDiv()">×</button>

</div>
<script>
    function collapseDiv() {
        const div = document.getElementById("collapsibleDiv");
        div.style.display = div.style.display === "none" ? "block" : "none";
    }
</script>

@endif
