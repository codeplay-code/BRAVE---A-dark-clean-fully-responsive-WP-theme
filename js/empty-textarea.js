// BEGIN TEXTAREA/FIELD EMPTY ON CLICK
function onBlur(el) {
    if (el.value === '') {
        el.value = el.defaultValue;
    }
}
function onFocus(el) {
    if (el.value === el.defaultValue) {
        el.value = '';
    }
}
// END TEXTAREA/FIELD EMPTY ON CLICK