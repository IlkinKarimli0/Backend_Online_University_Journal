function SomeDeleteRowFunction(btndel) {
    if (typeof(btndel) == "object") {
        $(btndel).closest("tr").remove();
    } else {
        return false;
    }
}