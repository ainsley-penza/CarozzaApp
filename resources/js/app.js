document.getElementById("filter_manufacturer").addEventListener("change", function() {
    let manu_id = this.value || this.options[this.selectedIndex].value;
    window.location.href = window.location.href.split('?')[0] + '?manufacturer_id=' + manu_id;
});