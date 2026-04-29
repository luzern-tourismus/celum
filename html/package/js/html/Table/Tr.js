import BaseContainer from "../Base/Base.js";


export default class TrContainer extends BaseContainer {

    constructor(parentContainer) {

        super("tr", parentContainer);

    }

    addData(name, value) {

        this._htmlElement.dataset[name] = value;
        return this;

    }


    getData(name) {

        return this._htmlElement.dataset[name];

    }

}