import ObjectContainer from "./Object.js";

export default class PdfObjectContainer extends ObjectContainer {

    constructor(parentContainer) {

        super(parentContainer);
        this.type = "application/pdf";

    }

}