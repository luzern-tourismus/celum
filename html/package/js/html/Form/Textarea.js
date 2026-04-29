import FormBaseContainer from "./Base.js";


export default class TextareaContainer extends FormBaseContainer {


    constructor(parentContainer) {
        super("textarea", parentContainer);
    }

    set rows(value) {
        this._htmlElement.rows = value;
    }


    set cols(value) {
        this._htmlElement.cols = value;
    }

    set name(value) {
        this._htmlElement.name = value;
    }

    set value(value) {

        this._htmlElement.value = value;

    }

    get value() {

        return this._htmlElement.value;

    }



    set value2(value) {

        this._htmlElement.innerText = value;

    }

    get value2() {

        return this._htmlElement.innerText;

    }



}




