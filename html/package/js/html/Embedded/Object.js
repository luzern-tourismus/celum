import BaseContainer from "../Base/Base.js";

export default class ObjectContainer extends BaseContainer {

    constructor(parentContainer) {
        super("object", parentContainer);
    }

    set data(value) {
        this._htmlElement.data = value;
    }

    set type(value) {
        this._htmlElement.type = value;
    }


    set width(value) {
        this._htmlElement.width = value;
    }

    set height(value) {
        this._htmlElement.height = value;
    }

}