import BaseContainer from "../Base/Base.js";


export default class HeadContainer extends BaseContainer {

    constructor() {

        super();
        this._htmlElement = document.getElementsByTagName("head")[0];

    }

}