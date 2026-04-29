import BaseContainer from "../Base/Base.js";
import BodyContainer from "../Document/Body.js";


export default class DialogContainer extends BaseContainer {


    /*constructor(parentContainer) {

        super("dialog", parentContainer);

    }*/


    constructor() {

        super("dialog");

    }


    showDialog() {

        let body = new BodyContainer();

        body.addContainer(this);



        this._htmlElement.showModal();

    }


    closeDialog() {

        this._htmlElement.close();
        this.removeContainer();

    }

}