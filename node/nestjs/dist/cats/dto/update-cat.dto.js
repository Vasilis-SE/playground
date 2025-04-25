"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
exports.UpdateCatDto = void 0;
const mapped_types_1 = require("@nestjs/mapped-types");
const create_cat_dto_1 = require("./create-cat.dto");
class UpdateCatDto extends (0, mapped_types_1.PartialType)(create_cat_dto_1.CreateCatDto) {
}
exports.UpdateCatDto = UpdateCatDto;
//# sourceMappingURL=update-cat.dto.js.map