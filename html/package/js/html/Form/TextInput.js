import InputContainer from "./Input.js";


export default class TextInputContainer extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "text";
    }

    /*setFocus() {
        this._htmlElement.focus();
    }*/


    set type(value) {
        this._htmlElement.type = value;
    }


    set placeholder(value) {
        this._htmlElement.placeholder = value;
    }

    set autocomplete(value) {

        //this._htmlElement.autocomplete = "off";
        this._htmlElement.autocomplete = "off_random";
        //this._htmlElement.list = "autocompleteOff";
        //list="autocompleteOff"

        //autocomplete="on|off">
        //


    }


    set onKeyUp(event) {
        this._htmlElement.addEventListener("keyup", event);
    }


    set onKeyDown(value) {
        document.addEventListener("keydown", value);
    }

    set onKeyPress(value) {
        document.addEventListener("keypress", value);
    }





}