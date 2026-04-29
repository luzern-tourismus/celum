import BaseContainer from "../Base/Base.js";

export default class BodyContainer extends BaseContainer {

    constructor() {

        super();
        this._htmlElement = document.getElementsByTagName("body")[0];

    }

}