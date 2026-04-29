import BaseContainer from "../Base/Base.js";

export default class ProgressContainer extends BaseContainer {

    _value = 0;

    _max;

    constructor(parentContainer) {

        super("progress", parentContainer);

    }


    set value(value) {

        if (value>this.max) {
            value = this.max;
        }

        this.addAttribute("value", value);
        this._value = value;
    }

    get value() {
        return this._value;
    }

    set max(value) {
        this.addAttribute("max", value);
        this._max = value;
    }

    get max() {
        return this._max;
    }


//<progress value="70" max="100">70 %</progress>


}