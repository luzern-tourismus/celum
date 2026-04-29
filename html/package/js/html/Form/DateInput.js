import InputContainer from "./Input.js";


export default class DateInputContainer extends InputContainer {

    constructor(parentContainer) {
        super(parentContainer);
        this._htmlElement.type = "date";
    }


    /*
    setFocus() {
        this._htmlElement.focus();
    }

    set placeholder(value) {
        this._htmlElement.placeholder = value;
    }


    set onKey(event) {
        this._htmlElement.addEventListener("keyup", event);
    }


    set keyDown(value) {

        document.addEventListener("keydown",value);

    }*/

}