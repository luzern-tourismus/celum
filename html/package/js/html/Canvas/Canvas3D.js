import ContentContainer from "../Base/Content.js";
import CanvasContainer from "./Canvas.js";

// Canvas2DContainer
export default class Canvas3DContainer extends CanvasContainer {


    _context;

    constructor(parentContainer) {

        super("canvas", parentContainer);
        this._context = this._htmlElement.getContext('3d');

    }






}