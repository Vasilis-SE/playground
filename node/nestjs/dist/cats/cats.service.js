"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
exports.CatsService = void 0;
const common_1 = require("@nestjs/common");
let CatsService = class CatsService {
    constructor() {
        this.cats = [];
    }
    create(cat) {
        this.cats.push(cat);
    }
    findAll() {
        return this.cats;
    }
    findOne(id) {
        return `This action returns a #${id} cat`;
    }
    update(id, updateCatDto) {
        return `This action updates a #${id} cat`;
    }
    remove(id) {
        return `This action removes a #${id} cat`;
    }
};
CatsService = __decorate([
    (0, common_1.Injectable)()
], CatsService);
exports.CatsService = CatsService;
//# sourceMappingURL=cats.service.js.map