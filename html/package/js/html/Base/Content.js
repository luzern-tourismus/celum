import BaseContainer from "./Base.js";

// TextBaseContainer
export default class ContentContainer extends BaseContainer {


    //content
    set text(value) {
        this._htmlElement.innerHTML = value;
    }

    get text() {

        return this._htmlElement.innerHTML;

    }


    set textDecoration(value) {
        this._htmlElement.style.textDecoration = value;
    }


    set editable(value) {

        if (value) {
        this.addAttribute("contenteditable","true");
        }

    }

    set onInput(value) {

        this._htmlElement.addEventListener("input", value);

    }


    set onFocusIn(value) {
        this._htmlElement.addEventListener("focusin", value);
    }


    set onFocusOut(value) {
        this._htmlElement.addEventListener("focusout", value);
    }


    emptyContainer() {
        this.text = "";
    }

}