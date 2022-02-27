import { Module } from '@nestjs/common';
import { AppController } from './app.controller';
import { AppService } from './app.service';
import { UserModule } from './user/user.module';
import { CatsModule } from './cats/cats.module';

@Module({
  imports: [UserModule, CatsModule],
  controllers: [AppController],
  providers: [AppService],
})
export class AppModule {}
