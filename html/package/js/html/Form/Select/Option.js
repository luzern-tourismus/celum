import BaseContainer from "../../Base/Base.js";


export default class OptionContainer extends BaseContainer {

    constructor(parentContainer) {
        super("option", parentContainer);
    }

    set value(value) {
        this._htmlElement.value = value;
    }


    set label(value) {
        this._htmlElement.innerText = value;
    }

}




