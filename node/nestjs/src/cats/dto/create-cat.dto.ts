import { Cat } from "src/interfaces/cat.interface";

export class CreateCatDto implements Cat {
    name: string;
    age: number;
    breed: string;
}
