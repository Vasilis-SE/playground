import { UpdateCatDto } from './dto/update-cat.dto';
import { Cat } from '../interfaces/cat.interface';
export declare class CatsService {
    private readonly cats;
    create(cat: Cat): void;
    findAll(): Cat[];
    findOne(id: number): string;
    update(id: number, updateCatDto: UpdateCatDto): string;
    remove(id: number): string;
}
